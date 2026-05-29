<script lang="ts">
	import './layout.css';
	import Header from './Header.svelte';

	import {useAuth} from './../lib/index.ts';
	const auth = useAuth();

	import LoginView from './login/LoginView.svelte';

	//TODO: make it work( and add backend to token)
	let { children } = $props();


</script>

<svelte:head>

</svelte:head>

{#if auth.isLoggedIn}
<LoginView />
{:else}
<div id="app">
	<Header />

	<main id="main-content">
		{@render children()}
	</main>
</div>
{/if}