<script lang="ts">
	import './layout.css';
	import Header from './Header.svelte';

	//TODO import token

	import LoginView from './login/LoginView.svelte';
	let isAuth = $state(false);
	let { children } = $props();


</script>

<svelte:head>

</svelte:head>

{#if !isAuth}
<LoginView />
{:else}
<div id="app">
	<Header />

	<main id="main-content">
		{@render children()}
	</main>
</div>
{/if}