import cv2
import numpy as np # linear algebra
import pandas as pd # data processing, CSV file I/O (e.g. pd.read_csv)
from random import shuffle
import os
for dirname, _, filenames in os.walk('/kaggle/input'):
    for filename in filenames:
        print(os.path.join(dirname, filename))  ,



os.listdir("../input/dogs-vs-cats/")[0]


from zipfile import ZipFile
zf = ZipFile('../input/dogs-vs-cats/train.zip','r')
zf.extractall('../kaggle/working/Temp')
zf.close()
#print(os.listdir("../kaggle/working/Temp/train"))


from zipfile import ZipFile
z = ZipFile('../input/dogs-vs-cats/test1.zip','r')
z.extractall('../kaggle/working/Temp')
z.close()


TRAIN_DIR = "../kaggle/working/Temp/train"
TEST_DIR = "../input/dogs-vs-cats/test1"
IMG_SIZE = 50
LR = 1e-3
MODEL_NAME = 'dogsvscats-{}-{}.model'.format(LR,'2conv-basic')


def label_img(img):
    word_label = img.split('.')[0]
    if word_label == 'cat':return [1,0]
    elif word_label == 'dog':return [0,1]


def create_train_data():
    training_data=[]
    for img in os.listdir(TRAIN_DIR):
        label = label_img(img)
        path = os.path.join(TRAIN_DIR, img)
        img= cv2.resize(cv2.imread(path,cv2.IMREAD_GRAYSCALE),(IMG_SIZE,IMG_SIZE))
        training_data.append([np.array(img),np.array(label)])
    shuffle(training_data)
    np.save('train_data.npy',training_data)
    return training_data



def process_test_data():
    testing_data=[]
    for img in os.listdir(TEST_DIR):
        path = os.join.path(TEST_DIR,img)
        img_num = img.split('.')[0]
        img= cv2.resize(cv2.imread(path,cv2.IMREAD_GRAYSCALE),(IMG_SIZE,IMG_SIZE))
        testin_data.append([np.array(img),img_num])
        shuffle(testing_data)
    np.save('test_data.npy',testing_data)
    return testing_data


