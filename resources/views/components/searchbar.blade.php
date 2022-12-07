<form class="search" method="POST">
    @csrf
    <input  class="search-txt" id="search" type="text" name="empName" placeholder="Type to search">
    <button class="search-btn" type="submit" >
        <i class="fas fa-search"></i>
    </button>
</form>
