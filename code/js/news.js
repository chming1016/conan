
function news_save()
{
	document.news.action+="&action=save";
	document.news.submit();
}

function news_purview()
{
	document.news.action+="&action=purview";
	document.news.submit();
}
function news_continue()
{
	document.news.action+="&action=continue";
	document.news.submit();
}
function news_cencel()
{
	location.href = "index2.php?page=news";
}
function news_del(key)
{
	if(confirm("確定刪除此篇文章？"))
		location.href = "index2.php?page=news&action=del&key="+key;
	
}