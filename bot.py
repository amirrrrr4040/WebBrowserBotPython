from selenium import webdriver
from bs4 import BeautifulSoup
import time

driver = webdriver.Chrome('/home/amir-paket/chromedriver')
driver.get('https://vk.com/habr')
time.sleep(1)

last = driver.execute_script('return document.body.scrollHeight')
while True:
    driver.execute_script('window.scrollTo(0, document.body.scrollHeight);')
    time.sleep(0.5)
    new = driver.execute_script('return document.body.scrollHeight')
    if new == last:
        break
    last = new
    print('going on...')

print('Done!')
new = driver.execute_script('alert("ok, done!")')