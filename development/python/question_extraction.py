import nltk
import spacy
from nltk.corpus import stopwords
from nltk.tokenize import sent_tokenize, word_tokenize
from sklearn.feature_extraction.text import TfidfVectorizer


class QuestionExtractor:
   
    def __init__(self, num_questions):

        self.num_questions = num_questions

        self.stop_words = set(stopwords.words('english'))

        self.ner_tagger = spacy.load('en_core_web_md')

        self.vectorizer = TfidfVectorizer()

        self.questions_dict = dict()

    def get_questions_dict(self, document):
      
        self.candidate_keywords = self.get_candidate_entities(document)

        self.form_questions()

        return self.questions_dict

    def get_filtered_sentences(self, document):

        sentences = sent_tokenize(document)

        return [self.filter_sentence(sentence) for sentence in sentences]

    def filter_sentence(self, sentence):

        words = word_tokenize(sentence)
        return ' '.join(w for w in words if w not in self.stop_words)

    def get_candidate_entities(self, document):
       
        entities = self.ner_tagger(document)
        entity_list = []

        for ent in entities.ents:
            entity_list.append(ent.text)

        return list(set(entity_list))  

    def form_questions(self):
       
        used_sentences = list()
        idx = 0
        cntr = 1
        num_candidates = len(self.candidate_triples)
        while cntr <= self.num_questions and idx < num_candidates:
            candidate_triple = self.candidate_triples[idx]

            if candidate_triple[2] not in used_sentences:
                used_sentences.append(candidate_triple[2])

                self.questions_dict[cntr] = {
                    "question": candidate_triple[2].replace(
                        candidate_triple[1],
                        '_' * len(candidate_triple[1])),
                    "answer": candidate_triple[1]
                }

                cntr += 1
            idx += 1
