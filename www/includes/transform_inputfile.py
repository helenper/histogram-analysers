# This file transform the input file from format from studens output to
# a readable format for the HistogramAnalyser

import sys


# NEED TO GET THE FILE FROM THE WEBPAGE
infile = open(filename, "r")

particles = []

for lines in infile.readlines():
    particles.append(lines.replace("\n", ""))

infile.close()

try:
    outfile = open(filename+"_HA", "w")
    print("The filename allready exists.")
    outfile.close()
except:
    outfile = open(filename+"_HA", "w+")


for part in particles:
    elm = part.split(" ")

    mll = elm[0]

    if elm[1] == "ee":
        type = 1
    elif elm[1] == "mm":
        type = 2
    elif elm[1] == "em":
        type = 3
    elif elm[1] == "g"
        type = 4

    channel = 0
    nJets = 0
    met = 0
    lepDeltaPhi = 0
    metLLDeltaPhi = 0
    sumLepPt = 0
    BTags = 0
    weights = 0

    outfile.write(type, channel, nJets, met, mll, lepDeltaPhi, metLLDeltaPhi, sumLepPt, BTags, weight )

    outfile.close()
