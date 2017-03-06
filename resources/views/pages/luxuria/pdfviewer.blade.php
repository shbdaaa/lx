<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="/pdfviewer/css/flipbook.style.css">
<link rel="stylesheet" type="text/css" href="/pdfviewer/css/font-awesome.css">

<script src="/pdfviewer/js/flipbook.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#container").flipBook({
            pages:[
                {src:"/pdfviewer/images/book2/page1.jpg", thumb:"/pdfviewer/images/book2/thumb1.jpg", title:"Cover"},
                {src:"/pdfviewer/images/book2/page2.jpg", thumb:"/pdfviewer/images/book2/thumb2.jpg", title:"Page two"},
                {src:"/pdfviewer/images/book2/page3.jpg", thumb:"/pdfviewer/images/book2/thumb3.jpg", title:"Page three"},
                {src:"/pdfviewer/images/book2/page4.jpg", thumb:"/pdfviewer/images/book2/thumb4.jpg", title:""},
                {src:"/pdfviewer/images/book2/page5.jpg", thumb:"/pdfviewer/images/book2/thumb5.jpg", title:"Page five"},
                {src:"/pdfviewer/images/book2/page6.jpg", thumb:"/pdfviewer/images/book2/thumb6.jpg", title:"Page six"},
                {src:"/pdfviewer/images/book2/page7.jpg", thumb:"/pdfviewer/images/book2/thumb7.jpg", title:"Page seven"},
                {src:"/pdfviewer/images/book2/page8.jpg", thumb:"/pdfviewer/images/book2/thumb8.jpg", title:"Last"}
            ],
			currentPage : {enabled:true, title:"Current page"},
			btnNext : {enabled:true, title:"Next page", icon:"fa-chevron-right"},
			btnPrev : {enabled:true, title:"Previous page", icon:"fa-chevron-left"},
			btnZoomIn : {enabled:false},
			btnZoomOut : {enabled:false},
			btnToc : {enabled:false},
			btnThumbs : {enabled:false},
			btnShare : {enabled:false},
			btnDownloadPages : {enabled:false},
			btnDownloadPdf : {enabled:false},
			btnSound : {enabled:false},
			btnExpand : {enabled:true, title:"Toggle fullscreen", icon:"fa-expand"}
        });
    })
</script>

</head>

<body>
<div id="container"/>
</body>

</html>
