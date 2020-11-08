FROM node:12

WORKDIR /usr/src/app

COPY package.json ./

RUN npm install
COPY . .

CMD [ "node", "server.js" ]

#  test-node:
#    build:
#      context: ../test-node
#      dockerfile: Dockerfile
#    environment:
#      NODE_ENV: development
#    volumes:
#      - "${ROOT_PATH:-..}/test-node:/opt/app"
#    labels:
#      - "traefik.port=8192"
#      - "traefik.backend=test-node"
#      - "traefik.frontend.rule=HostRegexp:{host:test-node.docker.localhost}"
