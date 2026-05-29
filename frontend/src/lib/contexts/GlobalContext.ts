import { createContext } from "svelte";

interface user{
    idUser: number;    
    username: string;
}
interface jwtTokenType{
    token: string;
    tokenContent:user | null;
    login: (username: string, password: string)=>Promise<void>;
    logout: ()=>void;
    isLoggedIn: boolean;
}


export const [getAuthContext, setAuthContext] = createContext<jwtTokenType>();
export const useAuth = () => {
    const context = getAuthContext();
    if(!context){
        throw new Error("No context")
    }
    return context;
}