<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<{include file="frontend/meta.tpl"}>

    <title><{$language.website_name}></title>

	<{include file="frontend/css.tpl"}>
	<!-- Custom CSS -->
	<link href="/css/index.css?<{$randseed}>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
	<{include file="frontend/navigation.tpl"}>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
					<{foreach from =$shopList item=row}>
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/358x167" alt="">
                            <div class="caption">
                                <{*<h4 class="pull-right">$24.99</h4>*}>
                                <h4><a href="/MainPage/shopInfo/1">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
							<{*
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
							*}>
                        </div>
                    </div>
					<{/foreach}>
                </div>
				 <!-- Page List -->
				<div class="row">
					<div class="col-md-4">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">
        <hr>
        <!-- Footer -->
		<{include file="frontend/footer.tpl"}>
    </div>
    <!-- /.container -->

	<{include file="frontend/js.tpl"}>
</body>
</html>
