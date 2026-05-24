<script lang="ts">
import { processLogin, processRegister, type userInfo, type loginRes } from "./login";


let isLogin: boolean = $state(false);
let logRes: loginRes = $state({msg:""});
let uInfo: userInfo = $state({username:'',password:''});

function switchLogin(){
    isLogin = !isLogin;
}
function handleSubmit() {
    if(!uInfo.password){
        logRes.msg = "missing password";
        return;
    }
    if(uInfo.password.length < 8){
        logRes.msg = "password too short(8 characters)";
        return;
    }
    if(!uInfo.username){
        logRes.msg = "missing username";
        return;
    }
    if(isLogin){
        processLogin(uInfo, logRes);
        return;
    }
    if(!isLogin){
        processRegister(uInfo, logRes);
        return;
    }
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
        <form action="" id="login-form">
            <input class="login-form-input" id="login-username-input" type="text" placeholder="username" bind:value={uInfo.username}>
            <input class="login-form-input" id="login-password-input" type="password" placeholder="password" bind:value={uInfo.password}>
            <p id="login-response" contenteditable="true" bind:innerText={logRes.msg}></p>
            <button id="login-submit-btn" type="submit" name="laginAction" onclick={(e)=>{
                e.preventDefault();
                handleSubmit();
                }}>
                {isLogin ? "Log In" : "Sign Up"}
            </button>
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
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }
    .login-form-input:focus{
        outline: none !important;
    }
    #login-response{
        color: crimson;
        font-size: small;
        margin-top: -0.5vh;
        margin-bottom: -0.5vh;
    }
        
</style>