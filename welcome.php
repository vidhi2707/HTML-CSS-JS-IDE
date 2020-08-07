<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src = 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js'></script>

<style>

html,body{
	margin:0; padding:0; height:100%; width:100%; overflow: hidden;
}

#editor 
{
	height: 100%;
	width:50%;
	display: inline-block;
}

#iframe
{
	height:100%;
	width:50%;
	display: inline-block;
}

#container 
{
	height: 100%;
	width: auto;
	white-space: nowrap;
	overflow: hidden;
}

</style>

</head>
<body onload = 'ready()'>

<div id = 'container'>
	<div id = 'editor'>
	</div>
	<iframe id = 'iframe' frameborder="0">
	</iframe>
</div>

<script>

function update()
{
	var idoc = document.getElementById('iframe').contentWindow.document;

	idoc.open();
	idoc.write(editor.getValue());
	idoc.close();

}

function setupEditor()
{
	window.editor = ace.edit("editor");
  editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/html");
  editor.setValue(`<!DOCTYPE html>
<html>
<head>
</head>

<body>
</body>

</html>`,1); //1 = moves cursor to end

  editor.getSession().on('change', function() {
    update();
  });

  editor.focus();
  
  
  editor.setOptions({
    fontSize: "16pt",
    showLineNumbers: false,
    showGutter: false,
    vScrollBarAlwaysVisible:true,
    enableBasicAutocompletion: false, enableLiveAutocompletion: false
  });

  editor.setShowPrintMargin(false);
  editor.setBehavioursEnabled(false);
}
function ready()
{
	setupEditor();
	update();
}

</script>

</body>
</html>