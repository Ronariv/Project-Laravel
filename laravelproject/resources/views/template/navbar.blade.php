<style>
.kanan{
    display: flex;
}
.kanan a i{
    font-size: 1.2rem;
}
</style>
<nav class="navbar navbar-expand-lh p-3" style="background-color: #b09370;">
    <a href="/" class="text-dark font-weight-bold text-decoration-none"><h6 class="font-weight-bold">Eli's Book Store</h6></a>
    <form action="/" class="search">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" name="search" placeholder="Search Book">
    </form>
    <div class="kanan">
        @if(auth()->check())
            <a href="#"><i class="bi bi-file-earmark-plus text-dark text-decoration-none ms-1"></i></a>
            <a href="#"><i class="bi bi-book text-dark text-decoration-none ms-1"></i></a>
            <a href="#"><i class="bi bi-bag text-dark text-decoration-none ms-1"></i></a>
            <a href="/logout" class="text-dark text-decoration-none"><h6 class="font-weight-bold ms-1">AboutUs</h6></a>
            <a href="/logout" class="text-dark text-decoration-none"><h6 class="font-weight-bold ms-2">Logout</h6></a>
        @else
            <a href="/login/" class="text-dark text-decoration-none"><h6 class="font-weight-bold">Login</h6></a>
        @endif
    </div>


</nav>
