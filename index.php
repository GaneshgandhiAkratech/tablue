<!DOCTYPE html>
<html>

<head>
<style>
.vizContainer
{
	text-align: center;
	margin-left: 20px;
}
</style>


    <title>Akratech Tableau Data visualization</title>
    
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.min.js"></script>
    <script type="text/javascript">
        function initViz() {
            var containerDiv = document.getElementById("vizContainer"),
                //url = "http://public.tableau.com/views/RegionalSampleWorkbook/Storms",
				//url = "https://public.tableau.com/profile/selvam.kanthasamy7862#!/vizhome/AkratechPvtLtd/Story1?publish=yes?:iid=3:embed=y",
		url ="https://prod-apnortheast-a.online.tableau.com/t/akratechdemo/views/Demo2/Akratechdataview_1/sudheer@akratech.com/Akratechtableaudataview?:embed=y",

                
                options = {
                    hideTabs: true,
                    onFirstInteractive: function () {
                        console.log("Run this code when the viz has finished loading.");o
                    }
                };
            
            // Create a viz object and embed it in the container div.
            var viz = new tableau.Viz(containerDiv, url, options); 
        }
    </script
	
</head>

<body onload="initViz();" style="margin: 40px;margin-left: 20px;">
    <div id="vizContainer" style="width: 1024px; height: 600px;"></div>   
</body>

</html>

