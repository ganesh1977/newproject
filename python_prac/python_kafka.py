from kafka import KafkaProducer
import json

bootstrap_servers = 'localhost:9092'

producer = KafkaProducer(bootstrap_servers=bootstrap_servers,value_serializer=lambda v: json.dumps(v).encode('utf-8'))

print(producer)


topic_name = 'my-topic'
message_data = {'message': 'Hello, Kafka!'}
producer.send(topic_name, message_data)

# Ensure all messages are sent before exiting
producer.flush()

# Close the producer
producer.close()