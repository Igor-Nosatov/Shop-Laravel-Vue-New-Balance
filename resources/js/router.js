import {
  createRouter,
  createWebHistory,
} from "vue-router/dist/vue-router.esm-bundler";
import Home1 from "./views/Home1.vue";
import Home from "./views/Home/Home.vue";
import Login from "./views/Auth/Login.vue";
import Register from "./views/Auth/Register.vue";
import Store from "./views/Store/Store.vue";
import Product from "./views/Product/Product.vue";
import Review from "./views/Review/Review.vue";
import Cart from "./views/Cart/Cart.vue";
import Account from "./views/Account/Account.vue";
import Checkout from "./views/Checkout/Checkout.vue";
import Contact from "./views/Contact/Contact.vue";
import GiftCard from "./views/GiftCard/GiftCard.vue";

export default () =>
  createRouter({
    history: createWebHistory(),
    routes: [
      {
        path: "/",
        name: "home",
        component: Home,
      },

      {
        path: "/login",
        name: "login",
        component: Login,
      },

      {
        path: "/register",
        name: "register",
        component: Register,
      },

      {
        path: "/store",
        name: "store",
        component: Store,
      },

      {
        path: "/product/:id",
        name: "product",
        component: Product,
      },
      
      {
        path: "/review/:id",
        name: "review",
        component: Review,
      },

      {
        path: "/account",
        name: "account",
        component: Account,
      },
      {
        path: "/cart",
        name: "cart",
        component: Cart,
      },

      {
        path: "/checkout",
        name: "checkout",
        component: Checkout,
      },

      {
        path: "/contact",
        name: "contact",
        component: Contact,
      },

      {
        path: "/gift-card",
        name: "giftCard",
        component:  GiftCard,
      },
      {
        path: "/home1",
        name: "home1",
        component: Home1,
      },
      {
        path: "/new",
        name: "new",
        component: () => import("./views/NewCompany.vue"),
      },
      {
        path: "/company/:id/edit",
        name: "edit",
        component: () => import("./views/EditCompany.vue"),
        props: true,
      },
    ],
  });
