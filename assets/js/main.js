/**
 * Nephro Access - Main JavaScript
 * Handles mobile menu toggle, navbar scroll effect, and smooth scrolling.
 *
 * @package Nephro
 */

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    /* ---------------------------------------------------------------
       Mobile Menu Toggle
    --------------------------------------------------------------- */
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const hamburgerTop = document.getElementById('hamburger-top');
    const hamburgerMid = document.getElementById('hamburger-mid');
    const hamburgerBot = document.getElementById('hamburger-bot');

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('open');
            toggle.setAttribute('aria-expanded', String(isOpen));

            // Animate hamburger to X
            if (isOpen) {
                hamburgerTop?.classList.add('rotate-45', 'translate-y-[8px]');
                hamburgerMid?.classList.add('opacity-0');
                hamburgerBot?.classList.add('-rotate-45', '-translate-y-[8px]');
            } else {
                hamburgerTop?.classList.remove('rotate-45', 'translate-y-[8px]');
                hamburgerMid?.classList.remove('opacity-0');
                hamburgerBot?.classList.remove('-rotate-45', '-translate-y-[8px]');
            }
        });

        // Close menu on link click
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
                hamburgerTop?.classList.remove('rotate-45', 'translate-y-[8px]');
                hamburgerMid?.classList.remove('opacity-0');
                hamburgerBot?.classList.remove('-rotate-45', '-translate-y-[8px]');
            });
        });
    }

    /* ---------------------------------------------------------------
       Navbar Scroll Shadow
    --------------------------------------------------------------- */
    const navbar = document.getElementById('main-nav');

    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    /* ---------------------------------------------------------------
       Smooth Scroll for Anchor Links
    --------------------------------------------------------------- */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href');
            if (!targetId || targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const navHeight = navbar?.offsetHeight ?? 0;
                const targetPos = target.getBoundingClientRect().top + window.scrollY - navHeight;

                window.scrollTo({
                    top: targetPos,
                    behavior: 'smooth',
                });
            }
        });
    });
});
