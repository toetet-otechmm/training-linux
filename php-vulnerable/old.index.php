
<div class="row">
    <div class="col-lg-12">
        <h1>C1</h1>
        <h1>
            <?php
            $str = "echo \"Hello \".<script>exec('pwd')</script>.\"!!!\";";
            
            eval($str);
            ?>
        </h1>
        <p>The objective of this exercise is improve your code. </p>
    </div>
</div>

{{-- 
<script>
    alert(exec(""))
</script> --}}