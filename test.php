<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//algorithmia.com/v1/clients/js/algorithmia-0.2.0.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $(this).scrollTop(0);
});

$(document).ready(function(){
    $("#summarize").click(function(){
		var input = $( "#detailedtext" ).text();
			//$( "#summarytext" ).text( input );
			Algorithmia.client("simGGwxDJ3WNMvMFK4jriJBTQvD1")
						.algo("nlp/AutoTag/1.0.1")
						.pipe(input)
						.then(function(output) {
						if(output.error) return console.error("error: " + output.error);
							//console.log(output);
							$("#keywords").text( "Keywords: " + output.result);
							$("#keywordsdiv").show();
							//$("#keywordsdiv").focus();
							setFocusOnKeywords();	
							
						});
						
			var client = Algorithmia.client("simGGwxDJ3WNMvMFK4jriJBTQvD1");
			client.algo('nlp/Summarizer/0.1.3').pipe(input).then(function(output) {
  				if(output.error) return console.error("error: " + output.error);
  						//console.log(output.result);
						$( "#summarytext" ).text( "Summary: " + output.result );
						$("#summarize").hide();	
						$( "#summarydiv" ).show(100);		
				});
			//alert(str);
    });
});
</script>
<script>

function setFocusOnKeywords()
{
	document.getElementById("keywordsdiv").focus();
}

function setScroll()
{
	//var objDiv = document.getElementById("detailedtextdiv");
	//objDiv.scrollTop = objDiv.scrollHeight;
	window.setInterval(function() {
  	var elem = document.getElementById("detailedtextdiv");
  	elem.scrollTop = elem.scrollHeight;
}, 5000);
share	
}
</script>

<link href="odsgtt.css" media="all" rel="stylesheet" type="text/css" />
<title>ODSG&amp;TT</title>
</head>
<body>

<div id="heading" tabindex = "1">
  <h1 align="center">ODSG&amp;TT</h1>
  <p id="description" class="Title"> On Demand Summary Generation and Text Tagging</p>
  </div>
<input name="Summarize" type="button" class="NavigationBackgroundColor" id="summarize" tabindex="2" value="Summarize" role = "Summarize the text"  description ="You can summarize the text below using this button."/input>
<div id="keywordsdiv" class="keywordsdiv" tabindex="2">
  <p id="keywords" align="center"></p>
</div>
<span id="summary" role="Summary" tabindex ="3">
<div id="summarydiv" class="summarydiv" >
  <p id="summarytext" align="center"></p>
</div>
</span>

<span id= "detailedtext" role="Detailed Text" tabindex ="5">
<div id="detailedtextdiv" title="Detailed Text"  class="detailed_text_div" role = "Deatailed Text" onkeypress= "setScroll()">
  <p id="detailedtext" title="Detailed Text" align="left">A short story is a piece of prose fiction that typically can be read in one sitting and focuses on a self-contained incident or series of linked incidents, with the intent of evoking a "single effect" or mood, however there are many exceptions to this.
    
    A dictionary definition is "an invented prose narrative shorter than a novel usually dealing with a few characters and aiming at unity of effect and often concentrating on the creation of mood rather than plot." The short story is a crafted form in its own right. Short stories make use of plot, resonance, and other dynamic components as in a novel, but typically to a lesser degree. While the short story is largely distinct from the novel or novella (a shorter novel), authors generally draw from a common pool of literary techniques. Short story writers may define their works as part of the artistic and personal expression of the form. They may also attempt to resist categorization by genre and fixed formation.
  <p> Short stories have deep roots and the power of short fiction has been recognised in modern society for hundreds of years. The short form is, conceivably, more natural to us than longer forms. We are drawn to short stories as the well-told story, and as William Boyd, the award-winning British author and short story writer has said:
    "[short stories] seem to answer something very deep in our nature as if, for the duration of its telling, something special has been created, some essence of our experience extrapolated, some temporary sense has been made of our common, turbulent journey towards the grave and oblivion".[2]
    
    In terms of length, word count is typically anywhere from 1,000 to 4,000 for short stories, however some have 20,000 words and are still classed as short stories. Stories of fewer than 1,000 words are sometimes referred to as "short short stories", or "flash fiction"</p>
  <p>Emerging from earlier oral storytelling traditions in the 17th century, the short story has grown to encompass a body of work so diverse as to defy easy characterization.
    
    With the rise of the realistic novel, the short story evolved in a parallel tradition, with some of its first distinctive examples in the tales of E. T. A. Hoffmann. The character of the form developed particularly with authors known for their short fiction, either by choice (they wrote nothing else) or by critical regard, which acknowledged the focus and craft required in the short form. An example is Jorge Luis Borges, who won American fame with "The Garden of Forking Paths", published in the August 1948 Ellery Queen's Mystery Magazine. Another example is O. Henry (author of "Gift of the Magi"), for whom the O. Henry Award is named. Other of his most popular, inventive and most often reprinted stories (among over 600) include: A Municipal Report, An Unfinished Story, A Blackjack Barginer, A Lickpenny Lover, Mammon and the Archer, Two Thanksgiving Day Gentlemen, The Last Leaf. American examples include: Jack London, Ambrose Bierce, F. Scott Fitzgerald, Ernest Hemingway, William Faulkner, Flannery O'Connor, John Cheever, and Raymond Carver. Science fiction short story with a special poetic touch was a genre developed with great popular success by Ray Bradbury. The genre of the short story was often neglected until the second half of the 19th century.
    
    The evolution of printing technologies and periodical editions were among the factors contributing to the increasing importance of short story publications. Pioneering role in founding the rules of the genre in the Western canon include, among others, Rudyard Kipling (United Kingdom), Anton Chekhov (Russia), Guy de Maupassant (France), Manuel Gutiérrez Nájera (Mexico) and Rubén Darío (Nicaragua).
    
    An important theoretical example for storytelling analysis is provided by Walter Benjamin in his illuminated essay The Storyteller where he argues about the decline of storytelling art and the incommunicability of experiences in the modern world.[16] Oscar Wilde's essay The Decay of Lying and Henry James's The Art of Fiction are also partly related with this subject.</p>
  </p>
</div>
</span> <span id="refrencelink" role="Refrence Link" tabindex="6">
<div id="referncelinkdiv" tabindex = "-1" >
  <p> This text is taken from following link just to be used as an example.<br/>
    <a href="https://en.wikipedia.org/wiki/Short_story" target="_blank">Short Story</a> </p>
</div>
</body>
</html>
