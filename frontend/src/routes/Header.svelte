<script lang="ts">
    let menu: boolean = $state(false);
    
    function toggleMenu(){
        menu = !menu;
    }
</script>

<div class="navbar">
    <a href="/">
        <img class="nav-icon-home" src="/assets/dndIcon-gold.png" alt="home">
    </a>
    <div class="nav-menu">
        <button class="nav-menu-drop-btn" onclick={toggleMenu}>
            <svg class="nav-menu-icon" xmlns="http://www.w3.org/2000/svg" width="auto" height="5vh" viewBox="0 0 41 40" version="1.1">
	            <path d="M 14.021 12.475 C 13.336 13.300, 13.051 14.691, 13.387 15.567 C 13.859 16.795, 14.742 16.995, 17.249 16.440 C 19.037 16.044, 21.850 15.642, 23.500 15.546 C 31.204 15.100, 32.304 14.971, 31.892 14.558 C 31.649 14.315, 28.311 13.820, 24.475 13.458 C 20.639 13.095, 16.997 12.389, 16.383 11.887 C 15.675 11.309, 14.809 11.525, 14.021 12.475 M 12.996 21.505 C 11.885 22.844, 11.938 23.367, 13.329 24.757 C 14.623 26.052, 15.250 26.150, 16.193 25.207 C 16.897 24.503, 20.209 24, 24.141 24 C 33.334 24, 33.822 22.252, 24.760 21.783 C 20.767 21.577, 16.785 21.071, 15.910 20.658 C 14.920 20.192, 13.821 20.511, 12.996 21.505 M 13.237 30.214 C 11.520 32.283, 13.347 34.381, 16.235 33.656 C 17.582 33.318, 21.923 32.975, 25.881 32.893 C 34.605 32.714, 34.262 31.739, 25.171 30.874 C 21.502 30.525, 17.569 29.929, 16.430 29.550 C 15.159 29.127, 13.927 29.383, 13.237 30.214" stroke="none" fill="#dfb873" fill-rule="evenodd"/>
            </svg>
        </button>
        
        <div class="nav-menu-content" class:show={menu}>
            <a href="#">L1</a>
            <a href="#">L2</a>
            <a href="#">L3</a>
        </div>
    </div>
</div>


<style>
    .navbar{
        padding: 0.5vh;
        display: flex;
        justify-content: space-between;
    }
    .nav-icon-home{
        height: 4vh;
        width: auto;
    }
    .nav-menu-icon{
        z-index: 2;
    }
    .nav-menu-drop-btn{
        z-index: 3;
        border: none;
        outline: none;
        background-color: inherit;
        font-family: inherit;
        cursor: pointer;
    }
    .nav-menu-content{
        position: absolute;
        right: 0;
        background-color: #3b3b3b;
        min-width: 12vw;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 10;
        display: none;
        margin-top: 1vh;
    }
    .nav-menu-content.show {
        display: block; 
    }
    .nav-menu-content a{
        color: #dfb873;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    .nav-menu-content a:hover {
        background-color: #3e3e3e;
    }
</style>
