FROM node:12

RUN mkdir /usr/src/app
WORKDIR /usr/src/app

ADD package.json yarn.lock /usr/src/app/
RUN yarn install
ENV PATH /usr/src/app/node_modules/.bin:$PATH

CMD npm run serve
