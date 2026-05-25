
export interface userInfo{
    username: string;
    password: string;
}
export interface loginRes{
    msg: string;
}
export async function processLogin(info: userInfo, resRef: loginRes){
    resRef.msg = "logged in";
}
export async function processRegister(info: userInfo, resRef: loginRes){
    try{
        const res = await fetch("http://localhost/character-manager-5e/backend/index.php?url=createUser",
            {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({username: info.username, password: info.password}),
                credentials: "include",
            }
        )
        if(!res.ok){
            const errorData = await res.json().catch(()=>({}));
            throw new Error(errorData.error || "An unknown error occurred");
        }
        const data = await res.json();
        console.log(data);
        resRef.msg = data?.message || data?.status || "Registration completed.";
    }catch(error){
        console.log("Error: "+error);
    }
}