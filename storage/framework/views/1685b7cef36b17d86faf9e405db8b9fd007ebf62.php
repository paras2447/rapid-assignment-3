<?php $__env->startSection('section'); ?>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-primary bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item"></li>
                        <a class="nav-link" href="/showContact">Show Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="container">
        <br>
        <h3 class="text-center">This is contact page</h3>
        <br> <br>
        <form method="post" action="<?php echo e(url('/')); ?>/contact">
            <?php echo csrf_field(); ?>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Your City" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" id="state" placeholder="Your State" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Message</label>
                <input type="text" class="form-control" name="message" id="message" placeholder="Your Message" required>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form> <br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\New folder\assignment-3\resources\views/contact.blade.php ENDPATH**/ ?>