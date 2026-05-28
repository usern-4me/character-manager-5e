<script lang="ts">
    import { createContext } from "svelte";

    interface user{
        idUser: number;    
        username: string;
    }
    interface jwtTokenI{
        token: string;
        tokenContent:user;
        login: (token: string)=>void;
        logout: ()=>void;
        isLoggedIn: boolean;
    }

    export const [getJwtContext, setJwtContext] = createContext<jwtTokenI>();
</script>