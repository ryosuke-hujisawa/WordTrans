# -*- coding: utf-8 -*-
import MeCab
import sys

reload(sys)
sys.setdefaultencoding('utf8')

from googletrans import Translator
translator = Translator()

#phpからの引数を受け取る
num = len(sys.argv)
count = 0

while count < num:
	text = sys.argv[count]
	count += 1

tagger = MeCab.Tagger("-Owakati")        
result = tagger.parse(text)
l = result.split()

l_num = len(l)
l_count = 0

while l_count < l_num:
	l_text = l[l_count]
	print '<p style="cursor: hand; cursor:pointer;" class="jp_p_class" id="'+ l_text +'">' + l_text + '</p>'
	translate_result = translator.translate(l_text ,dest='en')
	print '<br>'
	print "↓"
	print '<p style="cursor: hand; cursor:pointer;" class="en_p_class" id="'+ translate_result.text +'">' + translate_result.text + '</p>'
	print '<br>'
	l_count += 1










