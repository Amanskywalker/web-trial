import requests

r = requests.get('http://localhost:8900/read.php')
print r.text

if r.json() is None:
    print("No data recived")
else:
    for c in r.json():
        d = c.split(",");
        x = d[0]
        y = d[1]
        print "x = " + x
        print "y = " + y
        # call ploter function here
        # for test only pass x values in blink function
