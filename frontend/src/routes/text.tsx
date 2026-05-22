import { createFileRoute } from '@tanstack/react-router'
import { useEffect, useState } from 'react';

export const Route = createFileRoute('/text')({
  component: RouteComponent,
})
interface User {
  id: number;
  username: string;
  password: string;
}
function RouteComponent() {
  const [users, setUsers] = useState<User[]>([]);
  useEffect(()=>{
    fetch("http://localhost/character-manager-5e/backend/index.php?url=getUsers").then((res)=> res.json()).then((data)=>setUsers(data)).catch((err)=>console.log(err));
  },[]);
  return <>
    <div>
      {users.map((user)=>(
        <div><p>{user.id}, {user.username}, {user.password}</p></div>
      ))}
    </div>
  </>
}
