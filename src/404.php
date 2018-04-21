<? get_header(); ?>

<hr class="line marginB30">

<!-- ぱんくず -->
<section class="marginB30">
    <div class="wrap clearfix">
    <p><?
        if(function_exists('bcn_display')) {
            $bcn = bcn_display(true);
            $bcn = '<li>'.$bcn.'</li>';
            $bcn = mb_ereg_replace( "li/li", "</li><li>" ,$bcn );
            echo $bcn;
        }
        ?>
    </p>
    </div>
</section>
<!-- /ぱんくず -->


<section class="marginB60 info">
    <div class="wrap clearfix" id="mainbox_menu">


    <!-- main -->
    <div class="main_box">
		<h3 class="textCenter marginB30"><span class="f22">404</span></h3>
        <section class="space">
        <p class="textCenter f14">お探しのページは削除された可能性がございます。</p>
        </section>
    </div>
    <!-- /main -->

</section>

<? get_footer(); ?>