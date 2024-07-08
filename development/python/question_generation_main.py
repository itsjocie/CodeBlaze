from question_extraction import QuestionExtractor
import re
from nltk import sent_tokenize


class QuestionGeneration:

    def __init__(self, num_questions, num_options):
        self.num_questions = num_questions
        self.num_options = num_options
        self.question_extractor = QuestionExtractor(num_questions)

    def clean_text(self, text):
        text = text.replace('\n', ' ')  
        sentences = sent_tokenize(text)
        cleaned_text = ""
        for sentence in sentences:
      
            cleaned_sentence = re.sub(r'([^\s\w]|_)+', '', sentence)

            cleaned_sentence = re.sub(' +', ' ', cleaned_sentence)
            cleaned_text += cleaned_sentence

            if cleaned_text[-1] == ' ':
                cleaned_text[-1] = '.'
            else:
                cleaned_text += '.'

            cleaned_text += ' '  
        return cleaned_text
