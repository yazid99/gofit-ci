<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>/assets/css/bootstrap-datepicker.min.js"></script>
    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
    <script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>

</body>
    <footer>
        <div class="container p-2">
            <a href="#"><img class="socmed-icon float-right ml-4 mt-2" src="<?= base_url(); ?>/assets/icons/facebook.png"> </a>
            <a href="#"><img class="socmed-icon float-right mt-2" src="<?= base_url(); ?>/assets/icons/twitter.png"></a>
            <a href="<?= base_url(); ?>">
                <h3 class="brand-footer">Go Fit</h3>
            </a>
        </div>
    </footer>