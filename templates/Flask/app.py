# 1. Import libraries
import pickle
import pandas as pd
from flask import Flask, render_template, request, jsonify
import joblib
import numpy as np

# Load the dataset (if needed for any additional processing)
data = pd.read_csv('c:/xampp/htdocs/FE-ARCHITRONS-PA/templates/Flask/Dataset_Proyek_Rumah.csv')

app = Flask(__name__)

# Load the trained models
rf_cost_model = joblib.load('c:/xampp/htdocs/FE-ARCHITRONS-PA/templates/Flask/rf_cost_model.pkl')
rf_duration_model = joblib.load('c:/xampp/htdocs/FE-ARCHITRONS-PA/templates/Flask/rf_duration_model.pkl')

@app.route('/')
def home():
    return render_template('input.php')

@app.route('/predict', methods=['POST'])
def predict():
    # Get user input from the form
    tipe_rumah = int(request.form['tipe_rumah'])
    luas_tanah = int(request.form['luas_tanah'])
    luas_bangunan = int(request.form['luas_bangunan'])
    jumlah_lantai = int(request.form['jumlah_lantai'])
    jumlah_kamar_mandi = int(request.form['jumlah_kamar_mandi'])
    jumlah_kamar = int(request.form['jumlah_kamar'])
    tipe_atap = int(request.form['tipe_atap'])
    tipe_dinding = int(request.form['tipe_dinding'])
    tipe_pondasi = int(request.form['tipe_pondasi'])
    material_utama = int(request.form['material_utama'])
    jumlah_tenaga_kerja = int(request.form['jumlah_tenaga_kerja'])

    # Prepare the input data for prediction
    input_data = np.array([[tipe_rumah, luas_tanah, luas_bangunan, jumlah_lantai, jumlah_kamar_mandi,
                            jumlah_kamar, tipe_atap, tipe_dinding, tipe_pondasi, material_utama,
                            jumlah_tenaga_kerja]])

    # Make predictions
    predicted_cost = rf_cost_model.predict(input_data)[0]
    predicted_duration = rf_duration_model.predict(input_data)[0]

    # Kembalikan hasil dalam format JSON
    return jsonify({
        'predicted_cost': predicted_cost,
        'predicted_duration': predicted_duration
    })
        
    # Render the template with predictions
    return render_template('input.php', predicted_cost=predicted_cost, predicted_duration=predicted_duration)

if __name__ == '__main__':
    app.run(debug=True)