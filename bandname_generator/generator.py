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
    path = os.path.abspath(r"bandname_generator\adjectives.txt")
    adj = fileRead(path)

    path = os.path.abspath(r"bandname_generator\nounlist.txt")
    noun = fileRead(path)
    
    adjInt = random.randint(0,len(adj)-1)
    nounInt = random.randint(0,len(noun)-1)

    adjWord = adj[adjInt][0].upper() + adj[adjInt][1:]
    nounWord = noun[nounInt][0].upper() + noun[nounInt][1:]

    name = adjWord + " " + nounWord
    name2 = "The " + nounWord +"s"

    arr = [name, name2]
    choice = random.randint(0,1)
    print(arr[choice])

def main():
    generator()

main()
