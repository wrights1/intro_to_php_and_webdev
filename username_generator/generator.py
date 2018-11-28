'''
username generator
'''
import random
import os

def fileRead(pathName):
    f = open(pathName,'r')
    text = f.read()
    f.close()
    text = text.split()
    return text

def generator():
    path = os.path.abspath(r"username_generator\adjectives.txt")
    adj = fileRead(path)

    path = os.path.abspath(r"username_generator\nounlist.txt")
    noun = fileRead(path)

    fixes = ["xXx", "x_x", "_x_","_-_"]
    
    adjInt = random.randint(0,len(adj)-1)
    nounInt = random.randint(0,len(noun)-1)
    fixesInt = random.randint(0,len(fixes)-1)

    name = fixes[fixesInt] + adj[adjInt] + "_" + noun[nounInt] + str(random.randint(101,999)) + fixes[fixesInt]
    print(name)

def main():
    generator()

main()
