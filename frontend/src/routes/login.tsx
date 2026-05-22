import { createFileRoute } from '@tanstack/react-router'
import {}

export const Route = createFileRoute('/login')({
  component: RouteComponent,
})

function RouteComponent() {
  return <div>Hello "/login"!</div>
}
