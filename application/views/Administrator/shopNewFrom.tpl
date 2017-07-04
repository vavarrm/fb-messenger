<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<{include file="Administrator/meta.tpl"}>
    <title><{$language.admin_website_name}></title>
	
	<{include file="Administrator/css.tpl"}>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <{include file="Administrator/nav.tpl"}>
        <div id="page-wrapper">
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><{$language.admin_shop_list_add}></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
                <div class="col-lg-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <{$language.admin_shop_list_add}>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="/Administrator/doShopNew">
                                        <div class="form-group">
                                            <label><{$language.shop_name_col}></label>
                                            <input maxlength="20" type="text" class="form-control" style="width:50%">
                                        </div>
										<div class="form-group">
                                            <label><{$language.shop_depiction_col}></label>
                                            <input maxlength="20" type="text" class="form-control" style="width:50%">
                                        </div>
                                        <button type="submit" class="btn btn-default"><{$language.from_btn_submit}></button>
                                        <button type="reset" class="btn btn-default"><{$language.from_btn_reset}></button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
	<{include file="Administrator/js.tpl"}>
</body>
</html>
