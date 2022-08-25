// https://rapidapi.com/Coinranking/api/coinranking1/
import {createApi,fetchBaseQuery } from '@reduxjs/toolkit/query/react'

const  cryptoApiHeader={
    'X-RapidAPI-Host': 'coinranking1.p.rapidapi.com',
    'X-RapidAPI-Key': 'a0935a1600msh701166cdecd56fcp196d28jsn84947938277c'

}
const baseUrl='https://coinranking1.p.rapidapi.com';
const createRequest=(url)=>({url,headers:cryptoApiHeader});


export const cryptoApi =createApi({
    reducerPath:'cryptoApi',
    baseQuery: fetchBaseQuery({ baseUrl }),
    endpoints:(builder)=>({
     getCryptos:builder.query({
         query:(count)=>createRequest(`/coins?limit=${count}`)
     })
    })
});
export const{
    useGetCryptosQuery,
    useGetCryptoDetailsQuery,
  useGetExchangesQuery,
  useGetCryptoHistoryQuery,
}=cryptoApi;
/*const options = {
//     method: 'GET',
//     url: 'https://coinranking1.p.rapidapi.com/coins',
//     params: {
//       referenceCurrencyUuid: 'yhjMzLPhuIDl',
//       timePeriod: '24h',
//       'tiers[0]': '1',
//       orderBy: 'marketCap',
//       orderDirection: 'desc',
//       limit: '50',
//       offset: '0'
//     },
//     headers: {
//       'X-RapidAPI-Host': 'coinranking1.p.rapidapi.com',
//       'X-RapidAPI-Key': 'a0935a1600msh701166cdecd56fcp196d28jsn84947938277c'
//     }
//   };
*/