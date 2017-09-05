$(document).ready(function(e) {
  console.log($(document.body)); //select body
  console.log($("p")); //select all paragraphs
  console.log($("section p")); //all paragraphs inside a section
  console.log($("#mainNav li")); //all list items in main navigation
  
  
  console.log($("p.contentTxt strong")); //all strong elements inside .contentTxt paragraphs
  
  console.log($("h1").text()); //return text content form h1 element(s)
  console.log($("p.contentTxt:odd")); //select text from odd .contentTxt paragraphs
  console.log($("#active").attr("href")); //url from active link
  console.log($("p.contentTxt:first")); //first .contentTxt paragraph
});