<footer class="text-center text-white bg-info pt-3">
    <!-- Copyright -->
    <div class="text-center p-4">
        <span>© <?php echo date("Y"); ?> Copyright: Emedev</span>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="../js/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('a').on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 500, function() {
                window.location.hash = hash;
            });
        }
    });
});
</script>
</body>

</html>