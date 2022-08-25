import React from 'react'
import millify from 'millify'
import { Typography,Row,Col,Statistic } from 'antd'
import { Link } from 'react-router-dom'
import { useGetCryptosQuery } from '../services/cryptoApi'
import Cryptocurrencies from './Cryptocurrencies'
import News from './News'

import { useState } from 'react'
const {Title}=Typography;
const HomePage = () => {
  const[count1,setCount1]=useState(10)
  const {data,isFetching}=useGetCryptosQuery(10);
  const gloablState=data?.data?.stats;
  console.log("checking>>>",count1);
  if(isFetching) return 'Loading....';
   
  return (
   <>
  <Title level={2} className="heading">Global Crypto Stats</Title>
   <Row gutter={[32, 32]}>
     <Col span={12}><Statistic title="Total Cryptocurrencies" value={gloablState.total}/></Col>
     <Col span={12}><Statistic title="Total Exchanges" value={millify(gloablState.totalExchanges)}/></Col>
     <Col span={12}><Statistic title="Total Market Cap" value={`$ ${millify(gloablState.totalMarketCap)}`}/></Col>
     <Col span={12}><Statistic title="Total 24th Values" value={`$ ${millify(gloablState.total24hVolume)}`}/></Col>
     <Col span={12}><Statistic title="Total Markets" value={millify(gloablState.totalMarkets)}/></Col>
     
   </Row>
   <div className='home-heading-container'>
     <Title level={2} className="home-title">Top 10 
Cryptocurrency in the World</Title>
     <Title level={3} className="show-more"  onClick={()=>setCount1(100)}><Link to="/cryptocurrencies"> Show More</Link></Title>

   </div>
   <Cryptocurrencies simplified1={count1}/>


   <div className='home-heading-container'>
     <Title level={2} className="home-title">Latest 
Cryptocurrency  News</Title>
     <Title level={3} className="home-more"><Link to="/news"> Show More</Link></Title>

   </div>
   <News simplified/>
   </>
  )
}

export default HomePage