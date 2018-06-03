# -*- coding: utf-8 -*-
import sys
reload(sys)
sys.setdefaultencoding('utf8')

from googletrans import Translator
translator = Translator()

num = len(sys.argv)
count = 1

while count < num:
	print '<p style="cursor: hand; cursor:pointer;" class="en_p_class" id="'+ sys.argv[count] +'">' + sys.argv[count] + '</p>'
	translate_result = translator.translate(sys.argv[count] ,dest='ko')
	print '<br>'
	print "↓"
	print '<p style="cursor: hand; cursor:pointer;" class="jp_p_class" id="'+ translate_result.text +'">' + translate_result.text + '</p>'
	print '<br>'
	count += 1