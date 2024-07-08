import os
from flask import Flask, render_template, redirect, url_for
from flask.globals import request
from werkzeug.utils import secure_filename
from workers import pdf2text, txt2questions

UPLOAD_FOLDER = './pdf/'

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER


@ app.route('/')
def home():
    return render_template('home.php')

@ app.route('/quiz', methods=['GET', 'POST'])
def quiz():
    """ Handle upload and conversion of file + other stuff """

    UPLOAD_STATUS = False
    questions = dict()

    if not os.path.isdir('./pdf'):
        os.mkdir('./pdf')

    if request.method == 'POST':
        try:
            uploaded_file = request.files['file']
            file_path = os.path.join(
                app.config['UPLOAD_FOLDER'],
                secure_filename(
                    uploaded_file.filename))
            file_exten = uploaded_file.filename.rsplit('.', 1)[1].lower()

            uploaded_file.save(file_path)
            uploaded_content = pdf2text(file_path, file_exten)
            questions = txt2questions(uploaded_content)

            if uploaded_content is not None:
                UPLOAD_STATUS = True
        except Exception as e:
            print(e)
   