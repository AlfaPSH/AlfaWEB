from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/submit-form', methods=['POST'])
def submit_form():
    data = request.form
    with open("submissions.txt", "a") as file:
        file.write(f"Name: {data.get('name')}\n")
        file.write(f"Email: {data.get('email')}\n")
        file.write(f"Message: {data.get('message')}\n")
        file.write("-" * 40 + "\n")
    return jsonify({"message": "Form submitted successfully!"}), 200

if __name__ == '__main__':
    app.run(debug=True)
