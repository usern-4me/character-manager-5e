<script lang="ts">

let isLogin = $state(true);

function switchLogin(){
    isLogin = !isLogin;
}
</script>

<div id="login-container">
    <h1 id="login-title">
        {#if isLogin}
            Login
        {:else}
            Sign Up
        {/if}
    </h1>
    <div id="login-form">
        <form action="/" method="get" id="login-form">
            <input class="login-form-input" type="text" placeholder="username">
            <input class="login-form-input" type="password" placeholder="password">
            <button id="login-submit-btn" type="submit">{isLogin ? "Log In" : "Sign Up"}</button>
        </form>
        <a id="login-switch-btn" onclick={switchLogin}>{isLogin ? "Need an account? Sign Up" : "Already have an account? Log In"}</a>
    </div>
</div>


<style>
    @font-face {
        font-family: 'Anglodavek';
        src: url('/fonts/Anglodavek-a55E.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    #login-switch-btn{
        font-size: small;
        color: beige;
    }
    #login-container {
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #1f1f1f;
    }
    #login-form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1vh;
    }
    a{
        cursor: pointer;
    }
    #login-title{
        font-family: Anglodavek;
        color: #dfb873;
    }
    #login-submit-btn{
        background-color: #1e120c;
        background-image: linear-gradient(135deg, #2b160c 0%, #150a05 100%);
        color: #dfb873;
        font-family: 'Anglodavek', serif;
        font-size: medium;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 0.6 0.8rem;
        border: 3px solid #bfa15f;
        border-image: linear-gradient(to bottom right, #e2c98d, #8a6f3e, #e2c98d) 1;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }
    .login-form-input{
        background-color: #1e120c;
        color: #dfb873;
        border: 2px solid #bfa15f;
        border: linear-gradient(to bottom right, #e2c98d, #8a6f3e, #e2c98d) 1;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }
    .login-form-input:focus{
        outline: none !important;
    }
        
</style>