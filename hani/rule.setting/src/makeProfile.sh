#!/bin/bash

_cur_path='/home/uki408/Documents/test/' #`pwd`
__file_name='sonar1.xml'
_file_name=$_cur_path$__file_name
#_file_path='/home/uki408/Documents/test/' #maybe can use 'pwd' or user defined
#_file_name_=$_cur_path$file_name #maybe can use 'pwd' or user defined
_encode_rule="'UTF-8'"
_xml_ver="'1.0'"
_prior_rule='MAJOR'
_repos_key='javascript'
_lang_rule='js'

#echo $_file_name;
function __insertFooter()
{
    echo '</rules>' >> $_file_name
	echo '</profile>' >> $_file_name
}
function __insertHeader()
{
	# File exist then rename ex.version
	if [ -f $_file_name ];then
		echo "</br>File already existed"
		mv $_file_name $_file_name".ex"
		#rm $_file_name
	fi
	echo '<?xml version='$_xml_ver'encoding='$_encode_rule'?>' > $_file_name
	echo $?
	echo '<profile>' >> $_file_name
    echo '<name>'$__file_name'</name>' >> $_file_name
    echo '<language>'$_lang_rule'</language>' >> $_file_name
	echo '<rules>' >> $_file_name
}
function __insertRule()
{
	echo -e "</br> insertrule "
	# File exist
	if [ ! -f "$_file_name" ];then
		echo "("$_file_name")""File does not exist."
    else
		# Insert Rule
		rules=$1
		set -f
		arr_rules=(${rules//:/ })	
		#echo "</br>rules :"$rules
		#echo "</br>arr_rules:"${arr_rules[@]}
		sz_rule=${#arr_rules[@]}
		#echo "rules_size :"$sz_rule

		for rule in "${arr_rules[@]}";do
			#echo $rule
			echo '<rule>' >> $_file_name
			echo '<repositoryKey>'$_repos_key'</repositoryKey>' >> $_file_name
			echo '<key>'$rule'</key>' >> $_file_name
			echo '<priority>'$_prior_rule'</priority>' >> $_file_name
			echo '<parameters/>' >> $_file_name
			echo '</rule>' >> $_file_name
		done
	fi
}
function __manrules()
{

	if [ "$1" = "-header" ];then
		__insertHeader
	elif [ "$1" = "-footer" ];then
		__insertFooter
	elif [ "$1" = "-rules" ];then
		__insertRule $2
	elif [ "$1" = "-all" ];then
		__insertHeader
		__insertRule $2
		__insertFooter
	else
		echo "No command!!"
	fi
}
#echo -e "\n$1"
#echo -e "\n$2"
__manrules $1 $2
echo $?
