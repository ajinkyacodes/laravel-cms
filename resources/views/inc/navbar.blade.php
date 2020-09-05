<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{config('app.name', 'Laravel-CMS')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li><a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a></li>
            <li><a class="nav-item nav-link" href="/about">About</a></li>
            <li><a class="nav-item nav-link" href="/services">Services</a></li>
            <li><a class="nav-item nav-link" href="/posts">Blog</a></li>        
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
            <li><a class="nav-item nav-link" href="/posts/create">Create Post</a></li>
        </ul>
    </div>
</nav>