import "preline/preline"
import type { NuxtApp } from "nuxt/app"

declare var HSStaticMethods: {
  autoInit(collection?: string | string[]): void;
}

export default defineNuxtPlugin((nuxtApp: NuxtApp) => {
    nuxtApp.hook("page:finish", () => {
        HSStaticMethods.autoInit()
    })
})
