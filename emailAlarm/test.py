# -*- coding: utf-8 -*-
from bs4 import BeautifulSoup
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
chrome_options = Options()
chrome_options.add_argument("--headless")
chrome_options.add_argument("--no-sandbox")
chrome_options.add_argument("--disable-dev-shm-usage")
driver = webdriver.Chrome(chrome_options=chrome_options)
driver.implicitly_wait(3)

driver.get('https://e-onestop.pusan.ac.kr/common/login')
driver.find_element_by_name('id').send_keys('##')
driver.find_element_by_name('pw').send_keys('##')
driver.find_element_by_xpath('//*[@name="loginForm"]/footer/button').click()

driver.get('https://e-onestop.pusan.ac.kr/menu/grade/D02/D02001?menuId=2000040201&rMenu=04')
html = driver.page_source
soup = BeautifulSoup(html, 'html.parser')
notices = soup.select('#gread > tbody > tr > td')

text = notices[0].text.strip()
compText = "성적 열람기간이 아닙니다."
compText = compText.decode('utf-8')

if text == compText:
    print("X")
else:
    print("O")
