    <script lang="ts">
    import { setAuthContext } from "./GlobalContext";
    import type { Snippet } from "svelte";


    let { children }: { children: Snippet } = $props();

    export function jwtPayloadParse(token: string) {
        try{
            const parts = token.split('.');
            if(parts.length !== 3) return null;
            return JSON.parse(atob(parts[1].replace(/-/g, '+').replace(/_/g, '/')));
        }catch{
            return null;
        }
    }

    export function getCookie(name : string) : string | undefined {
    return document.cookie
        .split('; ')
        .find(row => row.startsWith(name + '='))
        ?.split('=')[1];
    }

    let token = $state(getCookie('5e_manager_token_cookie') || '');
    let isLoggedIn = $state(!!token);
    let username: string = $state("");
    let idUser: number = $state(0);


    $effect(() => {
        if (token && (username === "" || idUser === 0)){
            const payload = jwtPayloadParse(token);
            if(payload){
                username = payload.username;
                idUser = payload.idUser;
            } else {
                logout();
            }
        }
    });
    const login = (tokenNew: string) =>{
        const payload = jwtPayloadParse(tokenNew);
        if(!payload){
            throw new Error("Invalid token recived");
        }

        document.cookie = `5e_manager_token_cookie=${tokenNew}; path=/; max-age=86400`;
        localStorage.setItem('5e_manager_token', tokenNew);
        username = payload.username;
        idUser = payload.idUser;
        token = tokenNew;
        isLoggedIn = true;

        return payload;
    }
    
    const logout = () =>{
        document.cookie = `5e_manager_token_cookie=; path=/; max-age=0`;
        localStorage.removeItem('5e_manager_token');
        username = "";
        idUser = 0;
        token = '';
        isLoggedIn = false;

        return;
    }
    setAuthContext({
        get token() {return token;},
        get tokenContent() { return { idUser, username }; },
        get isLoggedIn() { return isLoggedIn; },
        login,
        logout
    })
</script>


{@render children()}