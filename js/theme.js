(() => {
    const storageKey = "levelup-hardware-theme";
    const savedTheme = localStorage.getItem(storageKey);
    const initialTheme = savedTheme === "light" ? "light" : "dark";

    document.body.dataset.theme = initialTheme;

    const updateToggle = () => {
        const toggle = document.getElementById("theme-toggle");
        if (!toggle) {
            return;
        }

        const isLight = document.body.dataset.theme === "light";
        toggle.textContent = isLight ? "Donkere modus" : "Lichtmodus";
        toggle.setAttribute(
            "aria-label",
            isLight ? "Schakel naar donkere modus" : "Schakel naar lichtmodus"
        );
    };

    const setTheme = (theme) => {
        document.body.dataset.theme = theme;
        localStorage.setItem(storageKey, theme);
        updateToggle();
    };

    document.addEventListener("DOMContentLoaded", () => {
        updateToggle();
        document.getElementById("theme-toggle")?.addEventListener("click", () => {
            const nextTheme =
                document.body.dataset.theme === "light" ? "dark" : "light";
            setTheme(nextTheme);
        });
    });

    window.addEventListener("storage", (event) => {
        if (event.key === storageKey && (event.newValue === "light" || event.newValue === "dark")) {
            document.body.dataset.theme = event.newValue;
            updateToggle();
        }
    });
})();
