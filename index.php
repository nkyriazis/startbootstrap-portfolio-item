<?php
include "config.php";
require_once('bib.inc.php');

define('IN_INDEX', true);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $name;?> - <?php echo $site_type;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./">About</a>
                    </li>
                    <li>
                        <a href="./?id=publications">Publications</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- <?php echo $name;?> Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $name;?><br>
                    <small><?php echo $site_type;?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		
        <div class="row">
			<?php
				if ($request == 'about' || $request == 'publications')
				{
					include $request.'.php';
				}
				else
				{
                    $stmt = $content->prepare('select title, abstract, banner from research where research.key="'.$request.'"');
					$result = $stmt->execute()->fetchArray();
                    					
					echo
						'<div class="col-md-12">
							<h1>'.$result['title'].'</h>
						</div>';
									
					echo
						'<div class="col-md-6"><h1>&nbsp;</h1>'
							.$result['banner'].
						'</div>';
											
					echo
						'<div class="col-md-6">
							<h2>Abstract</h2>
							<p>'.$result['abstract'].'</p>
						</div>';
						
					$stmt = $content->prepare('select title, value from content where content.key="'.$request.'"');
					$result = $stmt->execute();
					
					while ($entry = $result->fetchArray())
					{
						echo
							'<div class="col-md-6">
								<h2>'.$entry['title'].'</h2>'
								.$entry['value'].
							'</div>';
					}
					
					echo
						'<div class="row col-md-12">
							<h2>References</h2>';
							
						$stmt = $content->prepare('select value from "references" where "references".key="'.$request.'"');
						$result = $stmt->execute();
                        $entries = array();
						while ($entry = $result->fetchArray())
						{
                            array_push($entries, $db->getEntryByKey($entry['value']));
						}
                        display_bib($entries);
					echo
						'</div>';
				}
			?>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Research</h3>
            </div>
				<?php
					$stmt = $content->prepare('select key, title, thumb from research order by "order"');
					$result = $stmt->execute();
					
					while ($row = $result->fetchArray())
					{
						echo
							'<div class="col-sm-3 col-xs-6">
								<a href="./?id='.$row['key'].'">
									<div>
										<img class="img-responsive portfolio-item" src="'.$row['thumb'].'" alt="">
										<h4 class="overlay">'.$row['title'].'</h4>
									</div>
								</a>
							</div>';
					}
				?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <?php echo $name; ?> 2015. Site was based on the <a href="https://github.com/IronSummitMedia/startbootstrap-portfolio-item">Bootstrap-Portfolio Item theme</a>. Citations were printed using <a href="https://github.com/monperrus/bibtexbrowser">bibtexbrowser</a>.</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
