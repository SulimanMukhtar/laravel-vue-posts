import{v as d,c as u,w as i,o as r,a,u as s,X as c,f as _,t as f,g as p,b as t,d as w,n as g,e as b}from"./app-4f790f4e.js";import{_ as y}from"./GuestLayout-903959c2.js";import{_ as x}from"./InputError-3e01edd1.js";import{_ as k,a as h}from"./TextInput-39770f96.js";import{_ as v}from"./PrimaryButton-0c8800ba.js";import"./ApplicationLogo-0d262b7f.js";const V=t("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),N={key:0,class:"mb-4 font-medium text-sm text-green-600"},$=["onSubmit"],B={class:"flex items-center justify-end mt-4"},z={__name:"ForgotPassword",props:{status:String},setup(o){const e=d({email:""}),m=()=>{e.post(route("password.email"))};return(S,l)=>(r(),u(y,null,{default:i(()=>[a(s(c),{title:"Forgot Password"}),V,o.status?(r(),_("div",N,f(o.status),1)):p("",!0),t("form",{onSubmit:b(m,["prevent"])},[t("div",null,[a(k,{for:"email",value:"Email"}),a(h,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":l[0]||(l[0]=n=>s(e).email=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),a(x,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),t("div",B,[a(v,{class:g({"opacity-25":s(e).processing}),disabled:s(e).processing},{default:i(()=>[w(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],40,$)]),_:1}))}};export{z as default};