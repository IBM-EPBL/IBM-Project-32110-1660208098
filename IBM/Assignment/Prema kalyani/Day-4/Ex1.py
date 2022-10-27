from flask import Flask,redirect, url_for,request,render_template,json
import os

app = Flask(__name__)

food_items = {"1":"Apple","2":"Banana","3":"Orange"}

@app.route('/data',methods =['POST','GET'])
def api():
    if request.method == 'GET':
        return food_items
    
    if request.method == 'POST':
        data = request.json
        food_items.update(data)
        return "Data inserted"
@app.route("/data/<id>", methods =["PUT"])
def update(id):
        data = request.form['item']
        food_items[str(id)]=data
        return "Data updated"
    
@app.route("/route(/data/<id>", methods = ["DELETE"])
def delete(id):
        
    food_items.pop(str(id))
    return "Data deleted"

if __name__ == '__main__':
        port = os.environ.get('FLASK_PORT') or 8080
        port = int(port)
        
        app.run(port=port,host='0.0.0.0')
        
        app.run(debug = True)