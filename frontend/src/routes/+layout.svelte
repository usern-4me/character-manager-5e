<script lang="ts">
	import './layout.css';

	import LoginView from './login/LoginView.svelte';
	let isAuth = $state(true);
	let { children } = $props();


</script>

<svelte:head>

</svelte:head>

{#if !isAuth}
<LoginView />
{:else}
<div id="app">
	<nav>
		<a href="/">home</a>

		<button onclick={() => isAuth = false} class="logout-btn">Log Out</button>

	</nav>
	<main id="main-content">
		{@render children()}
	</main>
</div>
{/if}