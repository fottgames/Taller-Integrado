import re
import string
import urlparse

import selenium
from selenium import webdriver
from selenium.webdriver.support.ui import Select
from selenium.webdriver.support.ui import WebDriverWait
from selenium.common.exceptions import NoSuchElementException
from selenium.webdriver.common.by import By
from bs4 import BeautifulSoup
import time
from selenium.webdriver.support import expected_conditions as EC
import sqlite3

class scraper(object):
	def __init__(self):
		self.url = "http://barion.inapi.cl/BuscaBiblio/"
		self.driver = webdriver.Chrome("C:/Python27/div/chromedriver.exe")
	
	def getWeb(self):
		self.driver.get(self.url)
		selectd = Select(self.driver.find_element_by_id('d'))
		selectd.select_by_value('1')
		selectd2 = Select(self.driver.find_element_by_id('d2'))
		selectd2.select_by_value('31')
		selectm = Select(self.driver.find_element_by_id('m'))
		selectm.select_by_value('1')
		selectm2 = Select(self.driver.find_element_by_id('m2'))
		selectm2.select_by_value('12')
		selecty = Select(self.driver.find_element_by_id('y'))
		selecty.select_by_value('1840')
		selecty2 = Select(self.driver.find_element_by_id('y2'))
		selecty2.select_by_value('1840')
		self.driver.find_element_by_name('B3').click()

Scraper = scraper()
Scraper.getWeb()
print(Scraper.driver.title)